import instance from './config'

export function login(data) {
    return instance.post('login', data)
}
export function signinWithGoogle() {
    return instance.post('google-signin')
}

export function register(data) {
    return instance.post('register', data);
}

export function updateUser(data) {
    return instance.put('update-user', data);
}
export function getAddress(id){
    return instance.get(`get-address/${id}`);
}
export function getUser() {
    const token = localStorage.getItem('token') || null;
    return instance.get('user', {
        headers: {
            Authorization: `Bearer ${token}`
        }
    })
}