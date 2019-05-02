import * as React from 'react';
import './App.css';

import Hello from "./componets/Hello";

class App extends React.Component {
  public render() {
    return (
      <div className="App">
        <Hello name="test" enthusiasmLevel={5} />
      </div>
    );
  }
}

export default App;
