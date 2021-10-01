<div id="{{$id}}" class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      Лучшие репетиторы
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
      <div class="subtitle--bg">
        <span>Мы постоянно мониторим уровень качества уроков</span>
      </div>
    </p>
  </div>
  <div class="grid gap-10 mx-auto sm:grid-cols-2 lg:grid-cols-4 lg:max-w-screen-lg">
    @for ($i=0; $i < 4; $i++)
      <div class="grid grid-cols-1 justify-items-center">
        <img class="object-cover w-24 h-24 rounded-full shadow" src="https://tutor-math.com.ua/storage/tutors/June2021/x0qHLgW8j9e1HCRXw7T8.jpg" alt="Person" />
        <p class="text-lg font-bold mt-3">Анастасия</p>
        <p class="text-xs text-gray-800">Онлайн репетитор</p>
        <div class="flex flex-nowrap justify-center py-2 w-full">
            @for ($s=0; $s < 5; $s++)
              <svg xmlns="http://www.w3.org/2000/svg" class="text-primary-400 m-1" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"/>
              </svg>
            @endfor
          </div>
        <div class="flex flex-col justify-center mt-2">

          <p class="text-xs italic tracking-wide text-gray-800">
            Считаю своим долгом нести знания и просветления детям. Репетитором, как хобби начала заниматься еще в 18 лет, учась в ВУЗе. Окончила магистратуру КПИ на кефедре физико-математических дисциплин. Замечательный специалист в математике, алгебре, геометрии.
          </p>
        </div>
      </div>
    @endfor

  </div>
  <div class="flex justify-center mt-12">
    <button
      type="submit"
      class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-secondary-400 hover:bg-secondary-700 focus:shadow-outline focus:outline-none"
    >
      Подобрать репетитора
    </button>
  </div>
</div>
