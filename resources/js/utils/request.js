import '@/bootstrap'


const service = window.axios.create({
  baseURL: process.env.MIX_BASE_API,
  timeout: 30000, // Request timeout
})


service.interceptors.response.use(
  (response) => {

    return response.data
  },
  (error) => {
    let message = error.message
    if (error.response.data && error.response.data.errors) {
      message = error.response.data.errors
    } else if (error.response.data && error.response.data.error) {
      message = error.response.data.error
    }

    Message({
      message: message,
      type: 'error',
      duration: 5 * 1000,
    })
    return Promise.reject(error)
  }
)

export default service
