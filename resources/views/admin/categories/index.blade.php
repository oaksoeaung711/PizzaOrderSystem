@extends('admin.layouts.master')

@section('content')
<div class="relative">
    <div class="flex justify-between">
        <h1 class="text-4xl">Category List</h1>
        <div>
            <a href="{{ route('admin.categories.create') }}" class="btn-green flex items-center gap-2"><i class="fi fi-rr-plus"></i><span>Create New Category</span></a>
        </div>
    </div>
    <div class="mt-10">
        <table class="w-full bg-gray-50 rounded overflow-hidden">
            <thead>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">No</td>
                    <td class="px-6 py-4 whitespace-nowrap">Name</td>
                    <td class="px-6 py-4 whitespace-nowrap">Created At</td>
                    <td class="px-6 py-4 whitespace-nowrap">Updated At</td>
                    <td class="px-6 py-4 whitespace-nowrap">Action</td>
                </tr>
            </thead>
            <tbody>
                @if (count($categories) != 0)
                    @foreach ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $category->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $category->created_at->format("d M Y") }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $category->updated_at->format("d M Y") }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center gap-5">
                                    <a href="{{ route('admin.categories.edit',$category->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a>
                                    <a id="delete-modal-btn" href="javascript:void(0)" class="text-xl text-red-400"><i class="fi fi-rr-trash-xmark"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center">There is no category.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    
        <div id="delete-modal" class="hidden absolute inset-0 animate-fadeIn">
            <div class="w-1/2 mx-auto p-10 rounded-lg shadow-lg bg-gray-100">
                <div class="flex items-center justify-center">
                    <img src="{{ asset('assets/images/icons/bin.png') }}" alt="bin" class="w-28" />
                </div>
                <div>
                    <h4 class="text-xl">Are You Sure!</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/deleteModal.js') }}" type="text/javascript"></script>
@endsection