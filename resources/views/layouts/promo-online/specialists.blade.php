<div id="{{$id}}" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      Лучшие
      <span class="text-primary-500">репетиторы</span>

    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      <div class="subtitle--bg">
        <span>мы постоянно мониторим уровень качества уроков</span>
      </div>
    </p>
  </div>
  <div class="grid gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-lg">
    @foreach ($data['tutors'] as $tutor)
      <div class="grid grid-cols-1 justify-items-center place-content-start">
        <img class="object-cover w-24 h-24 rounded-full shadow" src="https://tutor-math.com.ua/storage/{{$tutor['image']}}" alt="Person" />
        <p class="text-lg font-bold mt-3">{{$tutor['name']}}</p>
        <p class="text-xs text-gray-800">Онлайн репетитор</p>
        <div class="flex flex-nowrap justify-center py-2 w-full">
            @for ($s=0; $s < 5; $s++)
              <svg xmlns="http://www.w3.org/2000/svg" class="text-primary-500 m-1" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
              </svg>
            @endfor
          </div>
        <div class="flex flex-col justify-center mt-2">

          <p class="text-xs italic tracking-wide text-gray-800">
            {!! $tutor['text'] !!}
          </p>
        </div>
      </div>
    @endforeach

  </div>
  <div class="flex justify-center mt-12">

    <smpl-button txt="Подобрать репетитора" cls="h-12" clr="secondary" slug="{{$slug}}"></smpl-button>

  </div>
</div>
