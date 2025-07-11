/**
 * jQuery compatibility script
 * This ensures jQuery is available globally before other scripts run
 */
(function() {
    // Check if jQuery is already defined
    if (typeof jQuery === 'undefined') {
        console.warn('jQuery is not loaded! Loading from CDN...');
        
        // Create a script element to load jQuery
        var script = document.createElement('script');
        script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
        script.type = 'text/javascript';
        script.onload = function() {
            console.log('jQuery loaded successfully from fallback');
            // Make jQuery available globally
            window.$ = window.jQuery = jQuery;
            
            // Trigger a custom event to notify other scripts
            document.dispatchEvent(new Event('jquery-loaded'));
        };
        document.head.appendChild(script);
    } else {
        console.log('jQuery is already loaded');
        // Ensure jQuery is globally available
        window.$ = window.jQuery = jQuery;
    }
})();
