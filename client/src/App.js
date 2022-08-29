import Footer from './components/Footer/Footer';
import Navbar from './components/Navbar/Navbar';
import './index.css'
import AppRoutes from './Routes/Routes';
function App() {
 
  return (
      <div className="App">
        <Navbar/>
        <AppRoutes/>
        <Footer/>
      </div>
  );
}

export default App;
