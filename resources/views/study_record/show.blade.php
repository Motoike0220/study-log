<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Study Record Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        {{ $studyRecord->title }}
                    </div>

                    <div class="mt-6 text-gray-500">
                        {{ $studyRecord->created_at->format('Y/m/d H:i') }}
                    </div>

                    <div class="mt-6">
                        {{ $studyRecord->content }}
                    </div>

                    <div class="mt-6">
                        <span class="font-bold">Duration: </span>{{ $studyRecord->duration }}
                    </div>

                    <div class="mt-6">
                        <span class="font-bold">Status: </span>
                        @if($studyRecord->status == 1)
                            <span class="text-green-500">Completed</span>
                        @else
                            <span class="text-red-500">Not Completed</span>
                        @endif
                    </div>

                    <div class="mt-6">
                        <span class="font-bold">Tag: </span>{{ $studyRecord->tag}}
                    </div>

                    <div class="mt-6">
                        <span class="font-bold">Start Time: </span>{{ $studyRecord->start_time }}
                    </div>

                    <div class="mt-6">
                        <span class="font-bold">End Time: </span>{{ $studyRecord->end_time }}
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('study_record.edit',$studyRecord->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


