import { render, screen } from '@testing-library/react';
import App from './App';

test('renders learn react link', () => {
  render(<App />);
  const linkElement = screen.getByText(/learn react/i);
  expect(linkElement).toBeInTheDocument();
});

import logo from './logo.svg';
import './App.css';
import * as importall from './emptysoulprojects/_emptysoul_library/import/import';
import es_content from './emptysoulprojects/data/js/content'


function App() {
  return (

    <div className="App">
      <header className="App-header" id="a">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          Edit <code>src/App.js</code> and save to reload.
        </p>
        <a
          className="App-link"
          href="https://reactjs.org"
          target="_blank"
          rel="noopener noreferrer"
        >
          Learn React
        </a> <br />

        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<button onClick={() => importall.helloworld()} >hallo </button>


<div onLoad={importall.scroll_api()}>
<a href="#a"  class="button-scroll">here</a>

</div>
      </header>

    </div>

  );
}

export default App;
