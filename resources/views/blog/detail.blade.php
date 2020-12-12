@extends('layout')
@section('title', 'ブログ詳細')
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>


<div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

  <div class="text-3xl mb-6 text-center ">
  <h2>{{ $blog->title }}</h2>
  </div>


  <div class="grid grid-cols-2 gap-4 max-w-xl m-auto">

    <div class="col-span-2 lg:col-span-1">
      <h2 class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full">作成日：{{ $blog->created_at }}</h2>
    </div>
    <div class="col-span-2 lg:col-span-1">
      <h2 class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full">更新日：{{ $blog->updated_at }}</h2>
    </div>
    <div class="col-span-2 lg:col-span-1">
      <h2 class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full">{{ $blog->content }}</h2>
    </div>


  </div>
</div>

@endsection