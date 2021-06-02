// содежимое index.js

import https from 'https'
const port = 3000
const requestHandler = (request, response) => {
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

    req.end("jgjgj")
}
const server = https.createServer(requestHandler)
server.listen(port, (err) => {
    if (err) {
        return console.log('something bad happened', err)
    }
    console.log(`server is listening on ${port}`)
})