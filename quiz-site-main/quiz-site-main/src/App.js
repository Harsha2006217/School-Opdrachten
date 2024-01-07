import './App.css';
import React from 'react';


class App extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      vraagNr: 0,
      score: 0,
      stop: false,
    }

  }

  componentDidMount() {
    this.getData();
  }
  
  getData() {
    fetch('http://localhost:8080/quiz/api-get')
    .then(res => res.json())
    .then((data) => {
      this.setState({
        jsonLoaded: true,
        jsonData: data
      });
    })
    .catch(console.log);
  }

  handleAnswerOptionClick(isCorrect) {
    if (isCorrect) {

      this.setState({'score': this.state.score + 1});
    } else {
      }
    if ( this.state.vraagNr < this.state.jsonData.length-1)  {
      this.setState({'vraagNr': this.state.vraagNr + 1});
    } else {
      this.setState({'stop': true});
    }



  }


  render() {
    if ( ! this.state.jsonLoaded ) {
      return (  <div className="app">loading...</div>)
      
    }
    var questions=this.state.jsonData;
    var antwoorden = questions[this.state.vraagNr].answerOptions;
    return (
        <div className="app">

          {this.state.stop ?  // hier testen we of we moeten stoppen, als we moeten stoppen laat dan het einde zien.
              (
                  <div className='score'>
                    Jouw score is {this.state.score} van de {questions.length}
                  </div>
              )
              : // dit is de else, we stoppen dus niet en laten de volgende vraag zien
              (
                  <>
                    <div className="column">
                      <span>Vraag {this.state.vraagNr + 1} van {questions.length}</span>
                      <span className="question">{questions[this.state.vraagNr].questionText}</span>
                    </div>

                    <div className="column uitlijnen">
                      {antwoorden.map((antwoord) => (
                          <button
                              onClick={() => this.handleAnswerOptionClick(antwoord.isCorrect)}>{antwoord.answerText}</button>
                      ))}
                    </div>
                  </>
              )
          }
        </div>
    );
  }

}

export default App;
