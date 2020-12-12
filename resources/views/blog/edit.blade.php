@extends('layout')
@section('title', 'ブログ編集')
@section('content')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>

<div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

  <div class="text-3xl mb-6 text-center ">
  ブログ投稿フォーム
  </div>

<form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
@csrf
<input type="hidden" name="id" value="{{ $blog->id }}">
  <div class="grid grid-cols-2 gap-4 max-w-xl m-auto">

    <div class="col-span-2 lg:col-span-1">
      <input
        id="title"
        name="title"
        class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="title"
        value="{{ $blog->title }}"
        type="text"
        >
        @if ($errors->has('title'))
            <div class="text-danger">
                {{ $errors->first('title') }}
            </div>
         @endif
    </div>

    <div class="col-span-2 lg:col-span-1">
        <textarea
            id="content"
            name="content"
            class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="content"
            rows="4"
        >{{ $blog->content }}</textarea>
        @if ($errors->has('content'))
            <div class="text-danger">
                {{ $errors->first('content') }}
            </div>
        @endif
    </div>
    <div class="col-span-2 text-right">
        <button   href="{{ route('blogs') }}" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
        キャンセル
        </button>
    </div>
    <div class="col-span-2 text-right">
        <button type="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
        更新
       </button>
    </div>
  </div>
</form>
</div>



<script>
function checkSubmit(){
if(window.confirm('更新してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection