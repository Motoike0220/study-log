<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>記録作成</title>
</head>
<body>
    <div class="flex justify-center">
        <div class="w-full md:w-2/3 lg:w-1/2 bg-white shadow-md rounded-lg p-6 mt-8">
          <form action="#" method="POST">
            @csrf
            <div class="mb-6">
              <label for="title" class="block text-gray-700 font-bold mb-2">タイトル:</label>
              <input type="text" name="title" id="title" class="border-2 border-gray-400 p-2 w-full rounded-md" required>
            </div>
            {{-- <div class="mb-6">
              <label for="category_id" class="block text-gray-700 font-bold mb-2">カテゴリー:</label>
              <select name="category_id" id="category_id" class="border-2 border-gray-400 p-2 w-full rounded-md" required>
                <option value="" disabled selected>選択してください</option>
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div> --}}
            <div class="mb-6">
              <label for="content" class="block text-gray-700 font-bold mb-2">内容:</label>
              <textarea name="content" id="content" class="border-2 border-gray-400 p-2 w-full rounded-md" required></textarea>
            </div>
            <div class="mb-6">
              <label for="duration" class="block text-gray-700 font-bold mb-2">学習時間:</label>
              <input type="time" name="duration" id="duration" class="border-2 border-gray-400 p-2 w-full rounded-md">
            </div>
            <div class="mb-6">
              <label for="status" class="block text-gray-700 font-bold mb-2">ステータス:</label>
              <select name="status" id="status" class="border-2 border-gray-400 p-2 w-full rounded-md" required>
                <option value="" disabled selected>選択してください</option>
                <option value="0">未着手</option>
                <option value="1">着手中</option>
                <option value="2">完了</option>
              </select>
            </div>
            <div class="mb-6">
              <label for="tag_id" class="block text-gray-700 font-bold mb-2">タグ:</label>
              <input type="text" name="tag_id" id="tag_id" class="border-2 border-gray-400 p-2 w-full rounded-md">
            </div>
            <div class="mb-6">
              <label for="start_time" class="block text-gray-700 font-bold mb-2">開始時間:</label>
              <input type="time" name="start_time" id="start_time" class="border-2 border-gray-400 p-2 w-full rounded-md">
            </div>
            <div class="mb-6">
              <label for="end_time" class="block text-gray-700 font-bold mb-2">終了時間:</label>
</body>
</html>
