<div class="wrapper">
    <div style="margin-top: 20px;" class="faq d-flex flex-column faq">
        <div class="faq__item" style="max-height: 60px;">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>Chat rules</span>
            </div>
            <div class="faq__item-body">
                <p>
The following are prohibited in the chat:
<br>
- Insults against other players and the administration, including veiled ones.<br>
- Links, wallets.<br>
- Begging.<br>
- Promo leaking.<br>
- Spam, any kind of advertising.<br>
<br>
For violating the rules, the administration has the right to deprive you of the opportunity to chat.<br>
In some cases, the administration may issue you a permanent account ban.
                </p>
            </div>
        </div>
        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>How does the referral system work?</span>
            </div>
            <div class="faq__item-body">
                <p>You get +10% of each referral deposit. <br>
                If you get a certain number of referrals, you can use the free wheel scrolling and get a bonus.</p>
            </div>
        </div>
        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>How long does the withdrawal take?</span>
            </div>
            <div class="faq__item-body">
                <p>The payment process takes from 1 minute to 24 hours from the moment the request is created.  <br>
                Sometimes, it can take up to 2 days.</p>
            </div>
        </div>
        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>What is the minimum withdrawal amount?</span>
            </div>
            <div class="faq__item-body">
                <p>The minimum withdrawal amount is 300 rubles.</p>
            </div>
        </div>

        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>My withdrawal has been rejected, what should I do?</span>
            </div>
            <div class="faq__item-body">
                <p>Most likely, you entered the data incorrectly, or violated our rules.</p>
            </div>
        </div>

        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>Can I play on the site from multiple accounts?</span>
            </div>
            <div class="faq__item-body">
                <p>No, registration of more than one account is prohibited by the rules.<br>If you play from multiple accounts, in the future the site administration has the right to cancel the current conclusions to explain the operations, <br>administration also has the right to issue an account lock.</p>
            </div>
        </div>

        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>I filled up my account, but the money didn't come</span>
            </div>
            <div class="faq__item-body">
                <p>In case of a similar problem, write to <a href="https://t.me/Eco5scom" class="link" target="_blank">support</a> indicating: the date of payment, the payment method, and payment details.<br>
                    If your time zone is not UTC+3:00, specify your time zone or city/region of residence.</p>
            </div>
        </div>

        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>Can I transfer funds to another player's balance?</span>
            </div>
            <div class="faq__item-body">
                <p>There is no such function at the moment.</p>
            </div>
        </div>

        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>How can I promote my referral link?</span>
            </div>
            <div class="faq__item-body">
                <p>When promoting a referral link, it is forbidden to use methods such as Booklets.<br>
                You can advertise the link using YouTube videos, as well as post the results of your games on your social media pages.</p>
            </div>
        </div>

        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>Are there any commissions on the website for deposits and withdrawals?</span>
            </div>
            <div class="faq__item-body">
                <p>Each deposit/withdrawal method has its own conditions (and sometimes there are no commissions).<br>
You can get acquainted with the commissions for depositing and withdrawing funds at the appropriate points when choosing the method.</p>
            </div>
        </div>

        <div class="faq__item">
            <div class="faq__item-heading d-flex align-center">
                <b class="faq__item-question d-flex align-center justify-center">?</b>
                <span>What bonuses can I get?</span>
            </div>
            <div class="faq__item-body">
                <p>To make your stay on the site the most interesting, we have provided a rich system of rewards and bonuses. <br>
                    We regularly publish fresh promo codes in our communities, with a cash bonus and a deposit bonus
</p>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
   $('.faq__item .faq__item-heading').click(function(e){
    e.preventDefault();
    if($(this).parent().hasClass('faq__item--opened')) {
        $(this).parent().removeClass('faq__item--opened').css({'max-height':'60px'});
    } else {
        $('.faq__item.faq__item--opened').removeClass('faq__item--opened').css({'max-height':'60px'});
        $(this).parent().addClass('faq__item--opened').css({'max-height': $(this).parent()[0].scrollHeight});
    }
});
</script>