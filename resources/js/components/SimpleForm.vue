<template id="simple-form">
    <div class="mx-auto flex flex-wrap justify-center">
      <template v-if="!sended">
        <div class="w-full">
          <div class="w-full p-2 relative mb-1">
            <label for="name" class="inline-block mb-1 font-medium">Имя</label>
            <input
              type="text" name="name"
              v-model="name"
              class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-primary-400 focus:outline-none focus:shadow-outline"
              placeholder="Имя"
              @blur="$v.name.$touch()"
            />
            <span v-if="$v.name.$error" class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">укажите имя</span>
          </div>
          <!-- phone -->
          <input type="text" name="phone" hidden>
          <div class="w-full p-2 relative mb-3">
            <label for="phone" class="inline-block mb-1 font-medium">Номер телефона</label>
            <input
              type="text" name="password" autocomplete="new-password"
              v-model="phone"
              ref="phones"
              class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-primary-400 focus:outline-none focus:shadow-outline"
              placeholder="Номер телефона"
              @blur="$v.phone.$touch()"
            />
            <span v-if="$v.phone.$error" class="text-xs text-white p-1 rounded opacity-90 bg-red-400 absolute -bottom-2 left-3">введите действительный номер телефона</span>
          </div>

          <div class="w-full p-2 relative">
            <button
              class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-primary-500 hover:bg-primary-700 focus:shadow-outline focus:outline-none"
              type="button"
              :disabled="$v.$invalid"
              @click="sendForm"
            >
              <template v-if="$v.$invalid">
                Записаться
              </template>
              <template v-else>
                <span class="flex justify-center">
                  <svg v-if="loading" class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm8 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8zm-19 0c0-6.065 4.935-11 11-11v2c-4.962 0-9 4.038-9 9 0 2.481 1.009 4.731 2.639 6.361l-1.414 1.414.015.014c-2-1.994-3.24-4.749-3.24-7.789z"/>
                  </svg>
                  <span>Отправить</span>
                </span>
              </template>
            </button>
          </div>
          <p class="text-xs text-gray-600 sm:text-sm pt-2">
            Оставьте номер телефона и получите пробное занятие по специальной цене
          </p>
        </div>
      </template>
      <template v-else>
        <div class="grid grid-cols-1 justify-items-center place-content-start text-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="text-primary-500 h-32 m-4" viewBox="0 0 24 24" fill="currentColor"><path d="M21.856 10.303c.086.554.144 1.118.144 1.697 0 6.075-4.925 11-11 11s-11-4.925-11-11 4.925-11 11-11c2.347 0 4.518.741 6.304 1.993l-1.422 1.457c-1.408-.913-3.082-1.45-4.882-1.45-4.962 0-9 4.038-9 9s4.038 9 9 9c4.894 0 8.879-3.928 8.99-8.795l1.866-1.902zm-.952-8.136l-9.404 9.639-3.843-3.614-3.095 3.098 6.938 6.71 12.5-12.737-3.096-3.096z"/></svg>

          <p>Ваша заявка успешно отправлена, оставайтесь на связи, скоро мы с Вами свяжемся!</p>
        </div>

      </template>



  </div>
</template>




<script>

import Inputmask from 'inputmask';
import { required, maxLength } from "vuelidate/lib/validators";

export default {
  props: ['slug'],
  data(){
        return{
          sended: false,
          sending: false, //индикатор отправки
          loading: false,
          errorshow: false,
          error: '',
          name: '',
          phone: '',
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
              marker: 'PROMO ' + this.slug + ' ПРОБНЫЙ',
           }).then((res) => {
            // проверяем наличие служебного сообщения из сервера
            if (res.msg) {
              this.loading = false;
              this.errorshow = true;
              this.error = res.msg;

            // проверяем облаботал ли сервер запрос
            } else if (res.success) {

              // вызываем событие GA
              gtag('event', 'sendPhone', {'event_category': 'getPhone', 'event_label': 'PROMO ' + this.slug + ' ПРОБНЫЙ' });

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
    },
    computed: {
      phoneNum: function() {
                var str = this.phone;
                str = str.replace(/[^0-9.]/g, '');
                str = str.substr(2);
                return str;
      },
    },
    mounted() {
        var im = new Inputmask('+38 '+'(999) 999-9999');
        im.mask(this.$refs.phones);
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
