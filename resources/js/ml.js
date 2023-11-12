import Vue from 'vue'
import { MLInstaller, MLCreate, MLanguage } from 'vue-multilanguage'

Vue.use(MLInstaller)

export default new MLCreate({
    initial: 'ru',
    languages: [
        new MLanguage('ru').create({
            name: 'Имя',
            your_name: 'Ваше имя',
            name_required: 'укажите имя',
            phone: 'Номер телефона',
            phone_required: 'введите действительный номер телефона',
            record: 'Записаться',
            send: 'Отправить',
            simple_form_promo: 'Оставьте номер телефона и получите пробное занятие по специальной цене',
            simple_form_success: 'Ваша заявка успешно отправлена, оставайтесь на связи, скоро мы с Вами свяжемся!',
            form_title: 'Вы сделали правильный выбор!',
            form_subtitle: 'Для того, чтобы продолжить, укажите контактную информацию',
            fill_form: 'заполните форму',
            continue: 'продолжить',
            form_info: 'будьте спокойны, мы не передаём номера телефонов третьим лицам',
            success: 'Готово',
            form_cost: 'Заказ успешно сформирован 🎫, для оплаты Вас будет перенаправлено на\n' +
                '                                        соответствующую страницу, следуйте инструкциям.',
            pay: 'Оплатить',
            we_call: 'Совсем скоро мы с Вами свяжемся, ☎️ ожидайте звонка!',
            back_to_site: 'Вернутся к просмотру сайта',
        }),

        new MLanguage('uk').create({
            name: 'Ім\'я',
            your_name: 'Ваше ім\'я',
            name_required: 'вкажіть ім\'я',
            phone: 'Номер телефону',
            phone_required: 'введіть дійсний номер телефону',
            record: 'Записатися',
            send: 'Надіслати',
            simple_form_promo: 'Залиште номер телефону і отримайте пробне заняття за спеціальною ціною',
            simple_form_success: 'Ваша заявка успішно відправлена, залишайтеся на зв\'язку, скоро ми з вами зв\'яжемося!',
            form_title: 'Ви зробили правильний вибір!',
            form_subtitle: 'Щоб продовжити, вкажіть контактну інформацію',
            fill_form: 'заповніть форму',
            continue: 'продовжити',
            form_info: 'будьте спокійні, ми не передаємо номери телефонів третім особам',
            success: 'Готово',
            form_cost: 'Замовлення успішно сформовано 🎫, для оплати Вас буде перенаправлено на\n' +
                'відповідну сторінку, слідуйте інструкціям.',
            pay: 'Сплатити',
            we_call: 'Зовсім скоро ми з Вами зв\'яжемося, ☎️ очікуйте дзвінка!',
            back_to_site: 'Повернутися до перегляду сайту',
        }),
    ]
})
