@extends('admin.layouts.master')

@section('content')
<div>
    <div class="w-1/2 mx-auto mt-10 p-10 shadow-lg rounded-lg bg-gray-50 space-y-10">
        <h3 class="text-2xl font-semibold">Edit Category</h3>
        <div>
            <form action="{{ route('admin.categories.update',$category->id) }}" method="POST">
                @csrf

                <x-input label="Name" name="name" type="text" icon="fi fi-rr-clipboard-list" placeholder="Enter Category Name" value="{{ $category->name }}" />
                <div class="mt-10 flex justify-end gap-3">
                    <a href="{{ route('admin.categories.index') }}" class="btn-red">Cancle</a>
                    <button class="btn-gray">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection