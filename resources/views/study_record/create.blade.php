<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>記録作成</title>
</head>
<body>
    <form method="POST" action="/study_record">
        @csrf
        <div>
            <label for="title">タイトル</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">内容</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div>
            <button type="submit">登録</button>
        </div>
    </form>
</body>
</html>
