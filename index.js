// import { GoogleAdsApi } from 'google-ads-api'
// import { enums } from "google-ads-api";
// const client = new GoogleAdsApi({
//     client_id: '466980095499-oab6des535r84c9vioegnnp6r21pmmbg.apps.googleusercontent.com',
//     client_secret: '7u844_RqnI0RHsG0U-DUjVBw',
//     developer_token: '0Co-7r8hMgfuJRC5rppecA',
// })

// const customer = client.Customer({
//     customer_id: "2405709396",
//     // customer_account_id: '113-160-3923',
//     // login_customer_id: '240-570-9396', // Optionally provide a login-customer-id
//     // linked_customer_id: '789-789-789', // Optionally provide a linked-customer-id
//     refresh_token: '1//04Hg808qTG3tBCgYIARAAGAQSNgF-L9Irifu6WKNObyGN82Mxd4O47HgNZZbde2VX7ogjLo-KcpfdUntBI4twLQrgoo4GUP5JSQ',
// })



// const campaigns = await customer.report({
//     entity: "campaign",
//     attributes: [
//         "campaign.id",
//         "campaign.name",
//         "campaign.bidding_strategy_type",
//         "campaign_budget.amount_micros",
//     ],
//     constraints: {
//         "campaign.status": enums.CampaignStatus.ENABLED,
//     },
//     limit: 20
// });
// console.log(campaigns)

import https from 'https'
const token = 'AQAAAAAjg-SlAAcd6Fqy3PLVqkaVp1Jg5-CWj_U';

const options = {
    url: 'https://api.direct.yandex.com/json/v5/campaigns',
    method: 'POST',
    // headers: {
    //     'Authorization': `Bearer ${token}`, // OAuth-токен. Использование слова Bearer обязательно
    //     "Client-Login": "MCPRmarketing@yandex.ru", // Логин клиента рекламного агентства
    //     "Accept-Language": "ru",
    //     'Content-Type': "application/json; charset=utf-8"
    // },
    body: {
        method: "get",
        params: {
            "SelectionCriteria": { /* CampaignsSelectionCriteria */

                "States": ["ON"],
            },
            /* required */
            "FieldNames": ["Id", "Name", "Type"]
        }
    }
}

const req = https.request(options, res => {
    res.headers({
        'Authorization': `Bearer ${token}`, // OAuth-токен. Использование слова Bearer обязательно
        "Client-Login": "MCPRmarketing@yandex.ru", // Логин клиента рекламного агентства
        "Accept-Language": "ru",
        'Content-Type': "application/json, charset=utf-8"
    })
    console.log(`statusCode: ${res.statusCode}`)

    res.on('data', d => {
        process.stdout.write(d)
    })
})

req.on('error', error => {
    console.error(error)
})

req.end()