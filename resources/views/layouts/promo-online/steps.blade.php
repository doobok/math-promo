<div id="{{$id}}" class="bg-gray-100">
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
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
          <span class="relative">{{__('steps.title-1')}}</span>
        </span>
        <span class="text-primary-500">{{__('steps.title-2')}}</span>
      </h2>
      <p class="text-base text-gray-700 md:text-lg">
        <div class="subtitle--bg">
          <span>{{__('steps.description')}}</span>
        </div>
      </p>
    </div>
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-5">
      <div class="grid gap-6 md:grid-cols-2 md:col-span-2 lg:col-span-3">
        <div class="rounded lg:p-5 lg:transition lg:duration-300 lg:hover:bg-secondary-50">
          <div class="flex items-center mb-1">
            <span class="flex items-center justify-center w-4 h-4 mr-2 text-xs font-medium text-white rounded bg-secondary-400">1</span>
            <p class="text-lg font-semibold sm:text-base">
                {{__('steps.element-1-t')}}
            </p>
          </div>
          <p class="text-sm text-gray-900">
              {{__('steps.element-1-d')}}
          </p>
        </div>
        <div class="rounded lg:p-5 lg:transition lg:duration-300 lg:hover:bg-primary-50">
          <div class="flex items-center mb-1">
            <span class="flex items-center justify-center w-4 h-4 mr-2 text-xs font-medium text-primary-900 rounded bg-primary-500">2</span>
            <p class="text-lg font-semibold sm:text-base">
                {{__('steps.element-2-t')}}
            </p>
          </div>
          <p class="text-sm text-gray-900">
              {{__('steps.element-2-d')}}
          </p>
        </div>
        <div class="rounded lg:p-5 lg:transition lg:duration-300 lg:hover:bg-primary-50">
          <div class="flex items-center mb-1">
            <span class="flex items-center justify-center w-4 h-4 mr-2 text-xs font-medium text-white rounded md:text-primary-900 bg-secondary-400 md:bg-primary-500">3</span>
            <p class="text-lg font-semibold sm:text-base">
                {{__('steps.element-3-t')}}
            </p>
          </div>
          <p class="text-sm text-gray-900">
              {{__('steps.element-3-d')}}
          </p>
        </div>
        <div class="rounded lg:p-5 lg:transition lg:duration-300 lg:hover:bg-secondary-50">
          <div class="flex items-center mb-1">
            <span class="flex items-center justify-center w-4 h-4 mr-2 text-xs font-medium text-primary-900 rounded md:text-white bg-primary-500 md:bg-secondary-400">4</span>
            <p class="text-lg font-semibold sm:text-base">
                {{__('steps.element-4-t')}}
            </p>
          </div>
          <p class="text-sm text-gray-900">
              {{__('steps.element-4-d')}}
          </p>
        </div>
      </div>
      <div class="relative md:col-span-2 lg:col-span-2">
        <img
          class="inset-0 object-cover object-bottom w-full h-56 rounded shadow-lg lg:absolute lg:h-full"
          src="/img/online/steps.jpg"
          alt=""
        />
      </div>
    </div>

    <div class="flex justify-center mt-12">

      <smpl-button txt="{{__('steps.button')}}" cls="h-12" clr="secondary" slug="{{$slug}}"></smpl-button>

    </div>

  </div>
</div>
