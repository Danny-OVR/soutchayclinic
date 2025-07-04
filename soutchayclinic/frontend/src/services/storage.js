/**
 * Manage how Access User Login data and Auth Tokens are being stored and retrieved from storage.
 * Current implementation uses sessionStorage or localStorage
 **/

export  function useStorageService() {
    // a unique key that identifies app storage values
    const myAppStoreKey = import.meta.env.VITE_STORAGE_KEY || 'APP';

    // key for user access token
    const TOKEN_KEY = myAppStoreKey + '_TOKEN';

    // key to remember user locale
    const LOCALE_KEY = myAppStoreKey + '_LOCALE';

    return {
        setLocale(locale) {
            localStorage.setItem(LOCALE_KEY, locale);
        },
        getLocale() {
            return localStorage.getItem(LOCALE_KEY);
        },
        getToken() {
            return sessionStorage.getItem(TOKEN_KEY) || localStorage.getItem(TOKEN_KEY);
        },
        saveLoginData(loginData, remember) {
            let token = loginData.token;
            if (remember) {
                localStorage.setItem(TOKEN_KEY, token);
            } else {
                sessionStorage.setItem(TOKEN_KEY, token);
            }
        },
        removeLoginData() {
            sessionStorage.removeItem(TOKEN_KEY);
            localStorage.removeItem(TOKEN_KEY);
            // uncomment to remove language locale when user logout
            //localStorage.removeItem(LOCALE_KEY);
        }
    };
}
