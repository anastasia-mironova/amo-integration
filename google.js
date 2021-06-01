import { GoogleAdsApi } from 'google-ads-api'

const client = new GoogleAdsApi({
    client_id: '466980095499-oab6des535r84c9vioegnnp6r21pmmbg.apps.googleusercontent.com',
    client_secret: '7u844_RqnI0RHsG0U-DUjVBw',
    developer_token: '0Co-7r8hMgfuJRC5rppecA',
})

const customer = client.Customer({
    customer_account_id: '240-570-9396',
    login_customer_id: '456-456-456', // Optionally provide a login-customer-id
    linked_customer_id: '789-789-789', // Optionally provide a linked-customer-id
    refresh_token: '1//04jbXBtK7RL_0CgYIARAAGAQSNgF-L9IrkFqbV0d4H1gctEiIW500cXZkS_U0DQwxznN-8mpp51aYWbiIxgNK6yg0JDH7EVTGXw',
})

// If done correctly, you should now be able to list the campaigns in the account 123-123-123
customer.campaigns.list()