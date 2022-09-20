import request from '@/utils/request'

export function postWhoIs(message) {
    return request({
        url: '/api/whois',
        method: 'post',
        data: {message : message},
    })
}
