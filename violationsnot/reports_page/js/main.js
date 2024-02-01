'use strict';

const e = React.createElement;

class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    
  }

  render() {
    

    return e(
     'button',
      { onClick: () => this.setState({ liked: true }) },
      'Like'
    );
  }
}

/*const domContainer = document.querySelector('#state');
const root = ReactDOM.createRoot(domContainer);
root.render(e(LikeButton));*/
