<x-app-layout>
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
</x-app-layout>
