@extends('layout')
@section('title', 'ブログ一覧')
@section('content')


<div class="text-gray-900 bg-gray-200">
    <p>ブログ記事一覧</p>
    <div class="p-4 flex">
      @if (session('err_msg'))
      <p class="text-danger">
      {{session('err_msg') }}
      </p>
      @endif
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">記事名</th>
                    <th class="text-left p-3 px-5">日付</th>
                    <th></th>
                </tr>
                @foreach($blogs as $blog)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><a href="/blog/{{ $blog->id  }}">{{ $blog->title  }}</a></td>
                    <td class="p-3 px-5">{{ $blog->updated_at  }}</td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline" onclick="location.href='/blog/edit/{{  $blog->id  }}'">Update</button>
                        <form method="POST" action="{{ route('delete', $blog->id) }}" onSubmit="return checkDelete()">
                        @csrf
                        <button type="submit" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline"
                        onclick=
                        >Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>


<script>
function checkDelete(){
if(window.confirm('削除してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection

