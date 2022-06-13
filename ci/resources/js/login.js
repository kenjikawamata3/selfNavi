import { isError } from "util";

export default {
    data: function () {
        return {
            valueEmailAddress: '', // 変更検知
            emailAddress : [
                isError => false,  // 変更検知時のエラーメッセージ表示(初期表示時は非表示)
            ],
            valuePassword    : '', // 変更検知
            password : [
                isError => false,  // 変更検知時のエラーメッセージ表示(初期表示時は非表示)
            ],
        }
    },
    watch: {
        // テキストボックスの変更イベント
        // 入力値に対してバリデーションチェックを実施（空文字は判定外）
        valueEmailAddress: function (newValue, oldValue) {
            //console.log('[INPUT] Email address: ' + newValue);
            if(newValue !== '') {
                const pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
                this.emailAddress.isError  = !pattern.test(newValue);

            }else{
                this.emailAddress.isError  = false;
            }
        },
        valuePassword: function (newValue, oldValue) {
            //console.log('[INPUT] Password: ' + oldValue);
            // #TODO AWS Cognitoの設定状況によりバリデーションチェックを実施
            if(newValue !== '') {

            }else{
                this.password.isError  = false;
            }
        },
    },
    methods: {
        processLogin () {
            // 入力値 バリデーションチェック
            if(this.validationCheck()) { return; }
        },
        // 入力値 バリデーションチェック
        validationCheck () {
            document.getElementById('message').textContent = '';
            console.log('Email Address: ' + this.valueEmailAddress);
            console.log('Password     : ' + this.valuePassword);

            if(this.valueEmailAddress === '' || this.valuePassword === '') {
                document.getElementById('message').insertAdjacentHTML('afterbegin', '<p>required email address and password</p>');
                return true;
            }
            if(this.emailAddress.isError || this.password.isError) {
                document.getElementById('message').insertAdjacentHTML('afterbegin', '<p>wrong email address or password</p>');
                return true;
            }

            return false;ß
        },
    },
}