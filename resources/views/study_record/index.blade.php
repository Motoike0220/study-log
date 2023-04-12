<!-- resources/views/my_page.blade.php -->
<x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('My Page') }}
      </h2>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-bold mb-4">My Records</h1>
            <ul>
              @foreach($my_records as $record)
              <li>
                <a href="{{ route('study_record.show', $record->id) }}">{{ $record->title }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="flex items-center justify-center">
        <form method="GET" action="#" class="flex flex-wrap gap-4 items-center justify-center">
            <div>
              <label for="target" class="sr-only">検索対象</label>
              <select name="target" id="target" class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                <option value="title">タイトル</option>
                <option value="body">本文</option>
              </select>
            </div>
            <div>
              <label for="keyword" class="sr-only">キーワード</label>
              <input type="text" name="keyword" id="keyword" placeholder="キーワードを入力してください" class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
              <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                検索
              </button>
            </div>
          </form>
      </div>

      <a href="{{ route('study_record.create')}}">投稿</a>


  </x-app-layout>

