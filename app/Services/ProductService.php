<?php

namespace App\Services;

use App\Repository\ProductRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductService
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->all();
    }

    public function getProducts()
    {
        $dataSelect = [ 
            'product.id', 
            'product.name as productName',
            'product.photo',
            'product.title',
            'product.description',
            'product.price',
            'product.hot',
            'category.name as categoryName',
        ];

        return $this->productRepository->leftJoinTable('category','category.id',$dataSelect,5,'product.category_id');
    }

    public function categoryFilter($id)
    {
        return $this->productRepository->filterByCategory($id);
    }

    public function getHotProduct()
    {
        return $this->productRepository->getHotProduct();
    }

    public function create($request)
    {
        if($request->hasFile('photo')){
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('photo')->storeAs('images',$fileNameToStore);
        }
        else
        {
            $fileNameToStore = 'noimage'.time().'.jpg';
        }
        $data = [
            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category,
            'hot' => isset($request->hot)?1:0,
            'description' => $request->description,
            'photo' => $fileNameToStore,
        ];

        $this->productRepository->create($data);
    }

    public function edit($id)
    {
        $product = $this->productRepository->find($id);
        return $product;
    }

    public function update(ProductRequest $request, $id)
    {
        $product = $this->productRepository->find($id);
        

        if($request->hasFile('photo')){
            // Storage::delete('images/'.$product->photo);
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('photo')->storeAs('images',$fileNameToStore);
        }
        else
        {
            $fileNameToStore = $product->photo;
        }

        $data = [
            'name' => $request->name,
            'title' => $request->title,
            'price' => $request->price,
            'category_id' => $request->category,
            'hot' => isset($request->hot)?1:0,
            'description' => $request->description,
            'photo' => $fileNameToStore,
        ];

        $this->productRepository->update($id,$data);
    }

    public function delete($id)
    {
        $product = $this->productRepository->find($id);
        $this->productRepository->delete($id);
        // Storage::delete('images/'.$product->photo);       
    }

}