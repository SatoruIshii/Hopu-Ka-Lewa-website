{% extends 'hopu_template_2012.php' %}

{% block contentarea %}
          <hgroup class="grid_12">
              <h1>Hopu Ka Lewa History</h1>
          </hgroup>
          <section id="teamhistory" class="grid_12">
              <table id="history_table">
                <caption><h3>Past Hopu Ka Lewa Winners</h3></caption>
                <tr>
                    <th>Year</th>
                    <th>Champions</th>
                    <th>Boat Race<br/>Winners</th>
                    <th>Penultimate<br/>Winners</th>
                    <th>Beer Bracket Winners</th>
                    <th>Spirit Team</th>
                    <th>Spirit Players</th>
                </tr>
                {% for year, winners in champtable %}
                    <tr>
                        <td>{{ year }}</td>
                        {% for i in range(0,winners|length) %}
                            <td>{% autoescape false %}{{ winners[i] }}{% endautoescape %}</td>
                        {% endfor %}
                    </tr>
                {% endfor %}
              </table>
          </section>
        <section id="adminhistory"class="grid_12">
              <table id="history_table">
                <caption><h3>Past Hopu Ka Lewa Details</h3></caption>
                <tr>
                 <th>Year</th>
                 <th>Hat-Draw Location</th>
                 <th>Tournament Director</th>
                 <th>Tournament Committee</th>
                </tr>
                {% for year, name in admintable %}
                    <tr>
                        <td>{{ year }}</td>
                        {% for i in range(0,name|length) %}
                            <td>{{ name[i] }}</td>
                        {% endfor %}
                    </tr>
                {% endfor %}
              </table>
          </section>
        <section id="historynarrative" class="grid_12">
              <hgroup>
                  <h1>History of Hopu Ka Lewa</h1>
                  <h2>By Ignacio Lobos</h2>
              </hgroup>
              <p>
            Late in 1999, somewhere far from the concrete jungle of Waikiki,
            a bunch of Honolulu Ultimate players high on too many cups of
            Kona Gold coffee decided it would be a great idea to have a
            relaxed, spirited coed tournament on the island of Oahu.
              </p>
            <p>
            Surely, we thought, palm trees, plenty of sunshine and the
            brilliant blue waters of Hawaii would be enough to attract
            hundreds, if not thousands of teams to our little corner of the
            world. Already, Oahu was known for its successful Kaimana
            Klassik, a competitive tournament held by the Hawaii Ultimate
            League Association (HULA) for the last 14 years. The Klassik was
            turning teams away. And, so we thought, we would be saddled by
            the same problem.
            </p>
            <p>
            Our first lesson in humility came on February 2000, when only one
            team had entered a bid. Eyebrows were raised, noses twitched in
            discomfort, and some grumbling was heard in the room as we
            pondered whether Hopu would turn from a dream into
            disappointment. Yet, this little group of disc players wasn&#039t
            about to give up.
            </p>
            <p>
            We pushed on, perhaps crazily, some might say. By April, nine
            teams had signed on, with 130 players joining our party. For our
            small Ultimate community in Oahu, it was quite a feat. We had
            teams from California, Minnesota and Virginia. Yet, without local
            players, the tournament would never have happened. So, our first
            thanks go to them, and to those who came from very far to join us
            for the love of the game.
            </p>
            <p>
            In 2003, after four successful tournaments, Hopu took another big
            step. The HULA community voted to take Hopu under its wing and
            make it an official HULA tournament. We believe this move will
            ensure the continued success of the tourney.
            </p>
            <p>
            Much mahalo and aloha should go to the first organizing Hopu
            Committee, which got this thing started. Corey Tyrrell was the
            tournament¹s first director, and the main thrust behind the idea
            of a coed tourney on Oahu. Joining him and keeping things running
smoothly were Julie Najita, Michael Constantinides, Rick Needham,
Helga Mispelblom Beyer, Ignacio Lobos and Scott Todd. 
          </section>
            
                
{% endblock %}