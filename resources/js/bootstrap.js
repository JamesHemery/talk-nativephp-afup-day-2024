import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.ipcRenderer = require('electron').ipcRenderer

document.addEventListener('livewire:navigated', () => {
    console.log('ok');
    ipcRenderer.on('log', (event, { level, message, context }) => {

        // Listen to Laravel event (could check against regex too)
        if (message.startsWith('Broadcasting [App\\Events\\TasksUpdated] on channels [nativephp]')) {

            // Either dispatch event to be handled by Livewire (following native-events convention)
            window.Livewire.dispatch('echo:nativephp,TasksUpdated')
        }
    })
})
