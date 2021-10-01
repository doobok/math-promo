<div id="{{$id}}" class=" bg-gray-100">
  <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <div class="grid grid-cols-2 gap-5 row-gap-5 sm:grid-cols-3 lg:grid-cols-6">

      @for ($i=0; $i < 6; $i++)
        <div class="text-center">
          <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-primary-400 sm:w-16 sm:h-16">
            <svg class="w-8 h-8 text-white sm:w-10 sm:h-10" fill="currentColor" viewBox="0 0 24 24">
              <path d="M6.628 23h-2.628l2.732-4h-6.732v-2h1v-16h22v16h1v2h-6.731l2.731 4h-2.627l-2.736-4h-5.273l-2.736 4zm14.372-20h-18v14h18v-14zm-6 12h4v1h-4v-1zm-8.245-6.074l1.157 4.319-1.099.294-.838-3.126-.974.576-.034-.014-.222-.828 1.801-1.165.209-.056zm3.835.922l1.131-.303.25.932-1.132.303.31 1.155-1.055.282-.31-1.154-1.134.304-.25-.932 1.135-.304-.297-1.106 1.055-.283.297 1.106zm4.509 1.471l-1.099.295-.838-3.127-.975.576-.033-.013-.222-.828 1.8-1.166.209-.056 1.158 4.319zm3.932-2.926l.231.861-2.995.803-.231-.861 2.995-.803zm-.328-1.225l.23.861-2.995.803-.23-.862 2.995-.802z"/>
            </svg>
          </div>
          <h6 class="mb-2 text-sm font-bold leading-5 tracking-wider uppercase">
            Информатика
          </h6>
        </div>
      @endfor

    </div>
  </div>
</div>
