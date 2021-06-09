import https from 'https';
import fs from 'fs';  
 const getToken = ()=>{
    const data = JSON.stringify({
        'client_id' : `${process.env.AMO_CLIENT_ID}`,
        'client_secret' : `${process.env.AMO_CLIENT_SECRET}`,
        'grant_type' : `${process.env.GRANT_TYPE}`,
        'code' : `${process.env.AMO_AUTH_CODE}`,
        'redirect_uri' : `${process.env.AMO_REDIRECT_URI}`
    })
    const options = {
        hostname: 'marketingmcpr.amocrm.ru',
        port: 443,
        path: '/oauth2/access_token',
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
           // 'Content-Length': data.length,
            'User-Agent': 'amoCRM-oAuth-client/1.0'
        }
    }
    const req = https.request(options, res => {
        console.log(`statusCode: ${res.statusCode}`)
    
        res.on('data', d => {
            process.stdout.write(d)
            if(res.statusCode==200){

                fs.writeFileSync('amo_token.json', d.toString());
            }
            
        })
    })
    
    req.on('error', error => {
        console.error(error)
    })
    req.write(data)
    req.end()
}
export  default getToken

