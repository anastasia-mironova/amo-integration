import https from 'https'
import addUniqueCampaigns from "./addUniqueCampaign.js";

const token = 'AQAAAAAjg-SlAAcd6Fqy3PLVqkaVp1Jg5-CWj_U';

const data = JSON.stringify({
    method: "get",
    params: {
        "SelectionCriteria": { /* CampaignsSelectionCriteria */

            "States": ["ON"],
        },
        /* required */
        "FieldNames": ["Id", "Name", "Type", "State"]
    }
})

const options = {
    hostname: 'api.direct.yandex.com',
    port: 443,
    path: '/json/v5/campaigns',
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'Content-Length': data.length,
        'Authorization': `Bearer ${token}`,
        'Client-Login': 'MCPRmarketing@yandex.ru', // Логин клиента рекламного агентства
        'Accept-Language': 'ru'
    }
}

const req = https.request(options, res => {
    console.log(`statusCode: ${res.statusCode}`)

    res.on('data', d => {
        process.stdout.write(d)
        if(res.statusCode==200){
            console.log("        ")
            const campaings = JSON.parse(d)['result']['Campaigns']
            // campaings.array.forEach(element => {
            //     console.log(element['Name'])
            // });
            for (let index = 0; index < campaings.length; index++) {
                const element = campaings[index];
                addUniqueCampaigns(element['Name'])
                
            }
        }
    })
})

req.on('error', error => {
    console.error(error)
})

req.write(data)
req.end()






