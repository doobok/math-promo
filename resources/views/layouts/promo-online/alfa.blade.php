<div class="relative">
  <img src="/img/online/index.jpg" class="absolute inset-0 object-cover w-full h-full" alt="" />
  <div class="relative bg-opacity-75 bg-gray-800">
    <svg class="absolute inset-x-0 -bottom-1 text-white" viewBox="0 0 1160 163">
      <path
        fill="currentColor"
        d="M-164 13L-104 39.7C-44 66 76 120 196 141C316 162 436 152 556 119.7C676 88 796 34 916 13C1036 -8 1156 2 1216 7.7L1276 13V162.5H1216C1156 162.5 1036 162.5 916 162.5C796 162.5 676 162.5 556 162.5C436 162.5 316 162.5 196 162.5C76 162.5 -44 162.5 -104 162.5H-164V13Z"
      ></path>
    </svg>
    <div class="relative px-4 pb-18 mx-auto overflow-hidden sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:pb-20 pt-32">
      <div class="flex flex-col items-center justify-between xl:flex-row">
        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
          <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
            {{__('alfa.title')}}
          </h1>
          <div class="subtitle--bg">
            <span>- {{__('alfa.subtitle')}}</span>
          </div>
          <p class="max-w-xl my-4 text-base text-gray-200 md:text-lg font-bold">{{__('alfa.list-title')}}</p>
            <ul class="list-inside lg:list-outside list-disc max-w-xl mb-7 text-base text-gray-200 md:text-lg">
              <li>{{__('alfa.element-1')}}</li>
              <li>{{__('alfa.element-2')}}</li>
              <li>{{__('alfa.element-3')}}</li>
            </ul>
          <div class="flex justify-center md:justify-start">
            <smpl-button txt="{{__('alfa.button')}}" cls="h-12" clr="secondary" slug="{{$slug}}"></smpl-button>
          </div>

        </div>
        <div class="w-full max-w-xl xl:px-8 xl:w-5/12">
          <div class="bg-white rounded shadow-2xl p-7 sm:p-10">
            <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                {{__('alfa.demo-lesson')}}
            </h3>
            <smpl-form slug="{{$slug}}" lang="{{$language}}"></smpl-form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
