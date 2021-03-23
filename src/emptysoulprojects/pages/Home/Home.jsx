import react from'react'
import { Blocks } from '../../data/project_import.jsx';
import ParseLanguages from '../../_emptysoul_library/assets/parseLanguages.asset.jsx'

const Home = () => {


    return (
      <>

        <Blocks.Header/>

        <div className="home_content">
        <Blocks.AboutUs/>
        <Blocks.VisionAndMission/>
        </div>
        </>
    )
};


export default Home;
