const TelegramBot = require('node-telegram-bot-api');
const mysql = require('mysql');
const nodeCron = require("node-cron");
const request = require('requestify');

const bot = new TelegramBot("TOKEN_BOT_CỦA_BẠN", {
    polling: {
        interval: 300,
        autoStart: true,
        params: {
            timeout: 10
        }
    }
})
const client = mysql.createPool({
    connectionLimit: 50,
    host: "localhost",
    user: "root",
    database: "eco5s",
    password: "5imB7243OtzD"
});

bot.on('message', async msg => {

    let chat_id = msg.chat.id,
        text = msg.text ? msg.text : '',
        settings = await db('SELECT * FROM settings ORDER BY id DESC');

    if(!text) return bot.sendMessage(chat_id, 'Tin nhắn không nên chứa hình ảnh / biểu tượng cảm xúc / stiker');

    if(text.toLowerCase() === '/start') {
        return bot.sendMessage(chat_id, `Xin chào!\nĐể nhận thưởng, bạn cần:\n\n1. 👉 Đăng ký theo dõi <a href="https://t.me/eco5s">kênh</a>\n2. 👉 Nhập lệnh nhận được từ trang web`, {
            parse_mode: "HTML"
        });
    }

    else if(text.toLowerCase().startsWith('/bind')) {
        let id = text.split("/bind ")[1] ? text.split("/bind ")[1]  : 'undefined';
        id = id.replace(/[^a-z0-9\s]/gi);
        let user = await db(`SELECT * FROM users WHERE id = '${id}'`);
        let check = await db(`SELECT * FROM users WHERE tg_id = ${chat_id}`);
        let subs = await bot.getChatMember('@erikaeIisabeth', chat_id).catch((err) => {});

        if (!subs || subs.status == 'left' || subs.status == undefined) {
            return bot.sendMessage(chat_id, `Bạn chưa đăng ký theo dõi <a href="https://t.me/eco5s">kênh</a>`, {
                parse_mode: "HTML",
                disable_web_page_preview: true
            });
        }
        if(user.length < 1) return bot.sendMessage(chat_id, 'Không tìm thấy người dùng', {
            parse_mode: "HTML"
        });
        if(check.length >= 1) return bot.sendMessage(chat_id, 'Tài khoản Telegram này đã được ràng buộc');
        if(user[0].bonus_2 == 1) return bot.sendMessage(chat_id, 'Người dùng đã được thưởng trước đó');
        console.log(user);

        await db(`UPDATE users SET tg_id = ${chat_id}, bonus_2 = 2 WHERE id = '${id}'`);

        return bot.sendMessage(chat_id, `😎 Cảm ơn bạn đã đăng ký theo dõi, ${user[0].name}!\n\nBây giờ bạn có thể nhận thưởng trên trang web.`);
    }

    return bot.sendMessage(chat_id, 'Lệnh không được nhận diện', {
        reply_to_message_id: msg.message_id
    });
});

nodeCron.schedule('0 13 * * *', async () => {
    setTimeout(async () => {
        request.post('https://eco5s.com/createPromoTG').then(function(response) {
            const res = response.getBody();
            return bot.sendMessage("@Eco5s_bot", `
💰 Mã giảm giá 10₽/250ak — ${res.promoSum}
        
⚡ Mã giảm giá 15%/20ak — ${res.promoDep}
        
🚀 Domain hiện tại — eco5s.com
        
📢 Website hoạt động bình thường, thời gian rút tiền trung bình là 2 giờ.`, {
                parse_mode: 'Markdown',
                reply_markup: JSON.stringify({
                inline_keyboard: [
                    [
                        { "text": "Kích hoạt mã giảm giá", "url": "https://eco5s.com/" }
                    ]
                ]
                })
            })
        })

        console.log(`[APP] Mã giảm giá đã được phát`);
    }, 10 * 
