<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name }}さんの投稿一覧
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $user->name }}さんの投稿一覧
            </h2>
            @foreach ($user->studyRecords as $studyRecord)
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <a href="{{ route('study_record.show', $studyRecord) }}">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h2 class="text-lg font-medium">{{ $studyRecord->title }}</h2>
                            <p class="text-gray-600">{{ $studyRecord->user->name }}さんが{{ $studyRecord->created_at->format('Y年m月d日') }}に投稿</p>
                            <p class="text-gray-600">{{ Str::limit($studyRecord->content, 100, '...') }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
