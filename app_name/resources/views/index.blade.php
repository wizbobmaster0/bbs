<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>BBS</title>

    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <style>body {padding-top: 80px;}</style>

    <!--<style>body {padding: 10px;}</style>-->
  </head>
  <body>

  <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
    <a class='navbar-brand' href='https://www.bbs_hoge.co.jp/articles'>BBS</a>
  </nav>


    <h1>BBS</h1>
    <h1>Hello, {{ $message }}</h1>
    @foreach($articles as $article)
      <p>
        <a href="https://www.bbs_hoge.co.jp/articles/{{ $article->id }}">
        {{ $article->content }}
        {{ $article->user_name }}
        </a>
      </p>
    @endforeach
    <div>
      <a href="https://www.bbs_hoge.co.jp/new/">新規投稿</a>
    </div>
  </body>
</html>