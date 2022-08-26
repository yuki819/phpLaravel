@props([
    'tweets' => []
])
<div class="bg-white rounded-md shadow-lg mt-5 mb-5">
    <ul>
        @foreach ($tweets as $tweet)
        <li class="border-b last:border-b-0 border-gray-200 p-4 flex item-start justify-between relative">
            <div>
                <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    {{ $tweet->user->name }}
                </span>
                <p class="text-gray-600">{!! nl2br(e($tweet->content)) !!}</p>
                <div style="position: absolute; top: 0.5rem; right: 0.1em;">
                    <x-tweet.options :tweetId="$tweet->id" :userId="$tweet->user_id"></x-tweet.options>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>