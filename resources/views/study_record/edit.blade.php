<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
                    記事の編集
                </h2>
                <form method="POST" action="{{route('study_record.update', $post->id) }}">
                    @csrf
                    <div class="mb-4">
                        <label class="text-gray-600 block" for="title">
                            タイトル
                        </label>
                        <input class="border rounded w-full py-2 px-3 text-gray-600" id="title" type="text" name="title" value="{{ $post->title }}" required>
                    </div>
                    <div class="mb-4">
                        <label class="text-gray-600 block" for="content">
                            本文
                        </label>
                        <textarea class="border rounded w-full py-2 px-3 text-gray-600" id="content" name="content" rows="8" required>{{ $post->content }}</textarea>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            更新する
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
