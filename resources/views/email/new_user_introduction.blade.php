@component('mail::message')
#新しいユーザが追加されました！

{{ $toUser->name }}さんこんにちは！

@component('mail::panel')
    新しく{{ $newUser->name }}さんが参加しましたよ！    
@endcomponent

@component('mail::button', ['url' => 'http://localhost/tweet'])
    つぶやきを見に行く
@endcomponent

@endcomponent