<x-app-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- 以下、レコードを繰り返し表示するためのBladeのコード -->
        @foreach ($post as $record)
          <!-- タイル部分のデザイン -->
          <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl">
            <!-- 画像部分（今回はなし） -->
            <div class="h-56 bg-gray-400"></div>
            <!-- コンテンツ部分 -->
            <div class="p-4">
              <!-- タイトル -->
              <h2 class="text-2xl font-bold mb-2">{{ $record->title }}</h2>
              <!-- 投稿者名 -->
              <div class="flex items-center text-gray-700 mb-4">
                <svg class="w-8 h-8 rounded-full mr-2" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M12 12a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0-8a7 7 0 0 0-7 7c0 4.418 3.582 8 8 8s8-3.582 8-8a7 7 0 0 0-7-7z"/>
                  <path fill="currentColor" d="M17.649 17.652a9.988 9.988 0 0 1-5.648 1.405 10.006 10.006 0 0 1-9.859-9.86 9.988 9.988 0 0 1 1.405-5.648A7 7 0 0 1 12 3a7 7 0 0 1 5.648 2.828c1.558 2.149 1.984 4.987 1.002 7.441zM12 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 8a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
                <span>{{ $record->user->name }}</span>
              </div>
              <!-- 投稿の一部 -->
              <p class="text-gray-700 text-base">{{ substr($record->content, 0, 100) }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <div class="mt-4">
        {{ $post->links() }}
    </div>
</x-app-layout>
