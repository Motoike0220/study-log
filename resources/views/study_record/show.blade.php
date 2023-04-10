@extends('layouts.app')

@section('content')
  <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 mb-4">
    <h1 class="text-2xl font-semibold mb-4">{{ $studyRecord->title }}</h1>
    <p class="text-gray-600 text-sm mb-4">
      {{ $studyRecord->created_at->format('Y/m/d H:i') }}
      by {{ $studyRecord->user->name }}
    </p>
    <div class="prose prose-indigo max-w-full">
      {!! $studyRecord->content !!}
    </div>
  </div>

  <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 mb-4">
    <h2 class="text-xl font-semibold mb-4">{{ __('Comments') }}</h2>
    @foreach ($studyRecord->comments as $comment)
      <div class="bg-gray-100 rounded-lg p-4 mb-4">
        <p class="text-gray-700 text-sm mb-2">
          {{ $comment->created_at->format('Y/m/d H:i') }}
          by {{ $comment->user->name }}
        </p>
        <div class="prose prose-indigo">
          {!! $comment->content !!}
        </div>
      </div>
    @endforeach
  </div>

  <div class="bg-white rounded-lg shadow-lg p-6 md:p-8">
    <h2 class="text-xl font-semibold mb-4">{{ __('Add a Comment') }}</h2>
    <form action="{{ route('comments.store') }}" method="POST">
      @csrf
      <input type="hidden" name="study_record_id" value="{{ $studyRecord->id }}">
      <div class="mb-4">
        <label class="block text-gray-700 font-semibold mb-2" for="content">
          {{ __('Content') }}
        </label>
        <textarea class="form-textarea block w-full" name="content" rows="5"></textarea>
      </div>
      <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
          {{ __('Post') }}
        </button>
      </div>
    </form>
  </div>
@endsection
