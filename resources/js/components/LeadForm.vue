<template>
  <transition name="modal">
    <div v-show="formstatus" class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container text-white h-full lg:h-auto flex justify-center">

          <div class="relative modal-body">
            <button @click="close" class="text-gray-300 absolute top-0 right-0">
              <svg  width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"><path d="M12 11.293l10.293-10.293.707.707-10.293 10.293 10.293 10.293-.707.707-10.293-10.293-10.293 10.293-.707-.707 10.293-10.293-10.293-10.293.707-.707 10.293 10.293z"/></svg>
            </button>

          <template id="lead-form" v-if="!sended">

            <div class="w-full flex text-center justify-center flex-col">
              <div class="text-2xl font-semibold text-white flex flex-row justify-center">
                Вы сделали правильный выбор!
            </div>
            <p class="text-base text-white m-3">
              Для того, чтобы продолжить, укажите контактную информацию
            </p>
          </div>

          <div v-if="errorshow" class="text-lg text-center">
              <span class="text-white p-2 rounded bg-red-400">{{error}}</span>
          </div>

          <div class="mx-auto px-4 flex flex-wrap justify-center">

            <div class="w-full md:w-4/5">
              <div class="w-full p-2 relative mb-1">
                <span class="text-sm text-white">Ваше имя</span>
                <input
                  type="text" name="name"
                  v-model="name"
                  class="border-0 placeholder-gray-700 text-gray-700 bg-white rounded text-xl shadow focus:outline-none focus:ring w-full p-4"
                  placeholder="Имя"
                  @blur="$v.name.$touch()"
                />
                <span v-if="$v.name.$error" class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">укажите имя</span>
              </div>
              <!-- phone -->
              <input type="text" name="phone" hidden>
              <div class="w-full p-2 relative mb-3">
                <span class="text-sm text-white">Номер телефона</span>
                <input
                  type="text" name="password" autocomplete="new-password"
                  v-model="phone"
                  ref="phone"
                  class="border-0 placeholder-gray-700 text-gray-700 bg-white rounded text-xl shadow focus:outline-none focus:ring w-full p-4"
                  placeholder="Номер телефона"
                  @blur="$v.phone.$touch()"
                />
                <span v-if="$v.phone.$error" class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">введите действительный номер телефона</span>
              </div>

              <div class="w-full p-2 relative">
                <button
                  class="bg-primary-500 hover:bg-primary-600 text-white w-full p-4 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
                  type="button"
                  :disabled="$v.$invalid"
                  @click="sendForm"
                >
                  <template v-if="$v.$invalid">
                    заполните форму
                  </template>
                  <template v-else>
                    <span class="flex justify-center">
                      <svg v-if="loading" class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm8 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-19 0c0-6.065 4.935-11 11-11v2c-4.962 0-9 4.038-9 9 0 2.481 1.009 4.731 2.639 6.361l-1.414 1.414.015.014c-2-1.994-3.24-4.749-3.24-7.789z"/>
                      </svg>
                      <span>продолжить</span>
                    </span>
                  </template>
                </button>
              </div>
            </div>

          <div class="w-full flex text-center justify-center">
            <p class="text-xs text-grey-50 m-3">
              * будьте спокойны, мы не передаём номера телефонов третьим лицам
            </p>
          </div>
        </div>
        </template>
        <template v-else>
          <div class="w-full flex text-center justify-center flex-col">
            <div class="text-2xl font-semibold text-white flex flex-row justify-center">

              <svg class="mr-2 text-green-400" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="currentColor"><path d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"/></svg>
              <span>Готово</span>
          </div>

          <template v-if="vars.cost > 0">
            <p class="text-base text-gray-300 m-3">
              Заказ успешно сформирован 🎫, для оплаты Вас будет перенаправлено на соответствующую страницу, следуйте инструкциям.
            </p>

            <div class="flex justify-center mt-3">
              <a
                class="bg-primary-500 hover:bg-primary-600 text-white w-full md:w-3/5 p-4 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
                :href="'https://tutor-math.com.ua/tutor-pay?deal=' + orderid"
              >
                  Оплатить
              </a>
            </div>

          </template>
          <template v-else>
            <p class="text-base text-gray-300 m-3">
              Совсем скоро мы с Вами свяжемся, ☎️ ожидайте звонка!
            </p>

            <div class="flex justify-center mt-3">
              <button
                class="bg-primary-500 hover:bg-primary-600 text-white w-full md:w-3/5 p-4 text-sm font-bold uppercase rounded shadow hover:shadow-lg outline-none focus:outline-none"
                type="button"
                @click="close"
              >
                  Вернутся к просмотру сайта
              </button>
            </div>
          </template>

        </div>
        </template>
      </div>

        </div>
      </div>
    </div>
  </transition>
</template>

<script>

import Inputmask from 'inputmask';
import { required, maxLength } from "vuelidate/lib/validators";
import { mapGetters } from "vuex";

export default {
  data(){
        return{
          sended: false,
          sending: false, //индикатор отправки
          loading: false,
          errorshow: false,
          error: '',
          name: '',
          phone: '',
          orderid: '',
        }
    },
    methods: {
      sendForm() {
        if (!this.sending) {
          this.sending = true;
          // this.formshow = false;
          this.loading = true;

          this.$store.dispatch('SEND_LEAD', {
              firstname: this.name,
              phone: this.phoneNum,
              marker: this.vars.marker,
              priceId: this.vars.priceid,
              cost: this.vars.cost,
           }).then((res) => {
            // проверяем наличие служебного сообщения из сервера
            if (res.msg) {
              this.loading = false;
              this.errorshow = true;
              this.error = res.msg;

            // проверяем облаботал ли сервер запрос
            } else if (res.success) {
              this.orderid = res.id;

              // вызываем событие GA
              gtag('event', 'sendPhone', {'event_category': 'getPhone', 'event_label': this.vars.marker });

              this.loading = false;
              this.sended = true;

            // в противном случае показываем сообщение об ошибке
            } else {
              this.loading = false;
              this.errorshow = true;
              this.error = 'Возникла ошибка. Данные не удалось отправить. Попробуйте повторить попытку немного позже.';
              // console.log(res);
            }
          })
        }
      },
      close(){
        this.$store.dispatch('TUGGLE_FORM', false);
      },
    },
    computed: {
      ...mapGetters(['formstatus']),
      ...mapGetters(['vars']),

      phoneNum: function() {
                var str = this.phone;
                str = str.replace(/[^0-9.]/g, '');
                str = str.substr(2);
                return str;
      },
    },
    mounted() {
        var im = new Inputmask('+38 '+'(999) 999-9999');
        im.mask(this.$refs.phone);
    },
    validations: {
      phone: {
        required,
        validFormat: val => /^\+38 \(0\d{2}\) \d{3}\-\d{4}$/.test(val),
      },
      name: {
        required,
      },
    },
  }
</script>
