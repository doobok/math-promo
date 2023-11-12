<div class="bg-center bg-cover bg-no-repeat relative py-8" style="background-image: url(/img/online/footer.jpg);">
  <div class="bg-center bg-cover bg-no-repeat absolute inset-0 z-20 bg-opacity-90 bg-gray-800"></div>
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 relative z-30">
    <div class="grid gap-10 lg:grid-cols-2">
      <div class="flex items-center justify-center -mx-4 lg:pr-8">
        <div class="px-3">
          <img
            class="object-cover w-40 h-40 rounded shadow-lg sm:h-64 xl:h-80 sm:w-64 xl:w-80"
            src="/img/online/footer2.jpg"
            alt=""
          />
        </div>
        <div class="flex flex-col items-start px-3">
          <img
            class="object-cover mb-6 rounded shadow-lg h-28 sm:h-48 xl:h-56 w-28 sm:w-48 xl:w-56"
            src="/img/online/footer1.jpg"
            alt=""
          />
          <img
            class="object-cover w-20 h-20 rounded shadow-lg sm:h-32 xl:h-40 sm:w-32 xl:w-40"
            src="/img/online/footer3.jpg"
            alt=""
          />
        </div>

      </div>
      <div class="flex flex-col justify-center md:pr-8 xl:pr-0 lg:max-w-lg">
        <div class="max-w-xl mb-6">
          <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
            {{__('omega.title-1')}}
            <span class="inline-block text-primary-500">{{__('omega.title-2')}}</span>
          </h2>
          <p class="text-base text-gray-100 md:text-lg">
              {{__('omega.description')}}
          </p>
        </div>
        <div class="flex justify-center md:justify-start">

          <smpl-button txt="{{__('omega.button')}}" cls="h-12" clr="primary" slug="{{$slug}}"></smpl-button>

        </div>
      </div>

    </div>
  </div>
</div>
