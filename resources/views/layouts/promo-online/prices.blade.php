<div id="{{$id}}" class="bg-gray-100">
  <div class="relative w-full h-full">
    <div class="absolute hidden w-full lg:block h-96"></div>
    <div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
      <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
          <span class="relative inline-block">
            <svg viewBox="0 0 100 100" fill="currentColor" class="absolute top-0 left-0 z-0 hidden h-32 w-32 -mt-8 -ml-20 text-primary-200 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
              <defs>
                <pattern id="27df4f81-c854-45de-942a-fe90f7a300f7" x="0" y="0" width="1" height="1">
                  <path d="M11 18a7 7 0 1 0 0-14 7 7 0 0 0 0 14Zm48 25a7 7 0 1 0 0-14 7 7 0 0 0 0 14Zm-43-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm63 31a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM34 90a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm56-76a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12 86a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm28-65a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm23-11a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm-6 60a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm29 22a5 5 0 1 0 0-10 5 5 0 0 0 0 10ZM32 63a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm57-13a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm-9-21a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM60 91a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM35 41a2 2 0 1 0 0-4 2 2 0 0 0 0 4ZM12 60a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                </pattern>
              </defs>
              <rect fill="url(#27df4f81-c854-45de-942a-fe90f7a300f7)" width="100" height="80"></rect>
            </svg>
            <span class="relative">Стоимость</span>
          </span>
          <span class="text-primary-400">занятий</span>
        </h2>
        <p class="text-base text-gray-700 md:text-lg">
          <div class="subtitle--bg">
            <span>выбери свою цену и начни получать качественные занятия</span>
          </div>
        </p>
      </div>
      <div class="max-w-screen-lg sm:mx-auto flex flex-wrap justify-center">

        @foreach ($data['prices'] as $price)
          @if ($price['group'] === 3)
            <div class="w-full md:w-1/2 lg:w-1/3 px-5">
              <div class="p-8 bg-gray-200 rounded">
                <div class="mb-4 text-center">
                  <p class="text-xl font-bold tracking-wide text-gray-600">
                    {{$price['name']}}
                  </p>
                  <div class="flex items-center my-2 justify-center flex-wrap">
                    <p class="mr-2 text-5xl font-semibold text-primary-700 lg:text-6xl">
                        {{$price['multipl'] * $data['global']['mindex']}}
                    </p>
                    <div class="flex flex-nowrap">
                      <span class="text-xl text-primary-700">грн</span>
                      <p class="text-lg text-gray-500">/занятие</p>
                    </div>
                  </div>
                </div>
                <ul class="mb-8 space-y-2">
                  <li class="flex items-center">
                    <div class="mr-3">
                      <svg class="w-4 h-4 text-primary-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                        <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                        <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                      </svg>
                    </div>
                    <p class="font-medium text-gray-500">{{$price['count']}} занятий в пакете</p>
                  </li>
                  <li class="flex items-center">
                    <div class="mr-3">
                      <svg class="w-4 h-4 text-primary-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                        <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                        <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                      </svg>
                    </div>
                    <p class="font-medium text-gray-500">регистрация в системе</p>
                  </li>
                  <li class="flex items-center">
                    <div class="mr-3">
                      <svg class="w-4 h-4 text-primary-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                        <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                        <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                      </svg>
                    </div>
                    <p class="font-medium text-gray-500">контроль баланса</p>
                  </li>
                  <li class="flex items-center">
                    <div class="mr-3">
                      <svg class="w-4 h-4 text-primary-400" viewBox="0 0 24 24" stroke-linecap="round" stroke-width="2">
                        <polyline fill="none" stroke="currentColor" points="6,12 10,16 18,8"></polyline>
                        <circle cx="12" cy="12" fill="none" r="11" stroke="currentColor"></circle>
                      </svg>
                    </div>
                    <p class="font-medium text-gray-500">история занятий</p>
                  </li>
                </ul>
                <button
                  type="submit"
                  class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-primary-400 hover:bg-primary-700 focus:shadow-outline focus:outline-none"
                >
                  Купить
                </button>
              </div>
              <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
              <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
              <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
            </div>
          @endif
        @endforeach

      </div>
    </div>
  </div>
</div>
