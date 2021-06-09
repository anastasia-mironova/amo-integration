import https from 'https';
import fs from 'fs';  
 const getAccessToken = ()=>{
    console.log('kek')
    let rawdata = fs.readFileSync('amo_token.json');
    const tokens = JSON.parse(rawdata);
    console.log(tokens)
    const data = JSON.stringify({
        'client_id' : process.env.AMO_CLIENT_ID,
        'client_secret' : process.env.AMO_CLIENT_SECRET,
        'grant_type' : 'refresh_token',
        'refresh_token' : tokens['refresh_token'],
        'redirect_uri' : process.env.AMO_REDIRECT_URI
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
           //console.log(d.toString())
            process.stdout.write(d)
            console.log("rkklfvmlm")
            console.log(d.toString())
            if(res.statusCode==200){

                fs.writeFileSync('amo_token.json', d.toString());
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

