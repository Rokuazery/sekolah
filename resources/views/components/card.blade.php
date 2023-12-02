<div class="w-full bg-blue-100 p-5 rounded-lg">
    <h1><i class="fa {{ $icon}} "> </i> {{$title}}</h1>
    <p><i class="fa fa-angle-right text-sm text-gray-400"></i><span class="inline"> {{ empty(trim($slot)) ? '-' : $slot }}</span></p>
</div>
