import https from 'https';
import fs from 'fs';  
 const getAccessToken = ()=>{
    console.log('kek')
    let rawdata = fs.readFileSync('./utils/amo_token.json');
    const tokens = JSON.parse(rawdata);
    console.log(tokens['refresh_token'])
    const data = JSON.stringify({
        'client_id' : process.env.AMO_CLIENT_ID,
        'client_secret' : process.env.AMO_CLIENT_SECRET,
        'grant_type' : 'refresh_token',
        'refresh_token' : tokens['refresh_token'],
        'redirect_uri' : "https://4cb1c4b23826.ngrok.io/"
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

                fs.writeFileSync('./utils/amo_token.json', d.toString());
            }
            
              });
            
        // })
    })
    
    req.on('error', error => {
        console.error(error)
    })
    req.write(data)
    req.end()
}
export  default getAccessToken

