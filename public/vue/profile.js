(() => {
    const mountApp = () => {
      const mountTarget = document.querySelector('#profile');
  
      if (!mountTarget) {
        return null;
      }
  
      return new Vue({
        el: mountTarget,
        data() {
            return {
                tes: 'tes',
            };
        },
      });
    };

    mountApp();
  })();