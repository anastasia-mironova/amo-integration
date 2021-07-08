import https from 'https';
import fs from 'fs';  
 const getAccessToken = ()=>{
    console.log('kek')
    let rawdata = fs.readFileSync('./utils/amo_token.json');
    const tokens = JSON.parse(rawdata);
    //console.log(tokens['refresh_token'])
    const data = JSON.stringify({
        'client_id' : "8a62580d-7596-4702-82fb-ecd236e69111",
        'client_secret' : "unQXPY90vCDGFy9RZWCJ0OpXytx6BzHdvYguKmt1isyfPWlbKeHsCLUqDyMFN8h7",
        'grant_type' : 'refresh_token',
        'refresh_token' : tokens['refresh_token'],
        'redirect_uri' : "https://90ce417474ce.ngrok.io/"
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
export default getAccessToken

